/**
 * Data Siswa JavaScript
 * Sistem Informasi Pelanggaran Siswa SMP Negeri 7 Jember
 */

import './bootstrap';

let siswaData = [];
let currentPage = 1;
const itemsPerPage = 10;
let filteredData = [];

function renderTable() {
    const tbody = document.getElementById('tableBody');
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageData = filteredData.slice(start, end);

    if (pageData.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="10" style="text-align: center; padding: 2rem; color: #94a3b8;">
                    <i class="fas fa-inbox" style="font-size: 2rem; display: block; margin-bottom: 0.5rem;"></i>
                    Tidak ada data siswa
                </td>
            </tr>
        `;
        updatePagination();
        return;
    }

    tbody.innerHTML = pageData.map((siswa, index) => `
        <tr>
            <td>${start + index + 1}</td>
            <td><strong>${siswa.nis}</strong></td>
            <td>${siswa.nisn}</td>
            <td>${siswa.nama}</td>
            <td>${siswa.kelas}</td>
            <td>${siswa.jk === 'L' ? 'Laki-laki' : 'Perempuan'}</td>
            <td>${siswa.noHp || '-'}</td>
            <td>
                <span class="badge-status ${siswa.status}">
                    ${siswa.status === 'aktif' ? 'Aktif' : 'Tidak Aktif'}
                </span>
            </td>
            <td>
                ${siswa.poin > 0 ? `<span style="color: ${siswa.poin > 20 ? '#ef4444' : '#f59e0b'}; font-weight: 700;">${siswa.poin}</span>` : '0'}
            </td>
            <td>
                <button class="btn-edit" onclick="editSiswa(${siswa.id})">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn-delete" onclick="deleteSiswa(${siswa.id})">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
    `).join('');

    updatePagination();
}

function updatePagination() {
    const totalItems = filteredData.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    const start = totalItems > 0 ? (currentPage - 1) * itemsPerPage + 1 : 0;
    const end = Math.min(start + itemsPerPage - 1, totalItems);

    document.getElementById('paginationInfo').textContent =
        `Menampilkan ${start}-${end} dari ${totalItems} data`;

    document.getElementById('prevPage').disabled = currentPage === 1;
    document.getElementById('nextPage').disabled = currentPage === totalPages || totalPages === 0;

    let pageNumbers = '';
    for (let i = 1; i <= totalPages; i++) {
        pageNumbers += `<button class="page-btn ${i === currentPage ? 'active' : ''}" onclick="goToPage(${i})">${i}</button>`;
    }
    document.getElementById('pageNumbers').innerHTML = pageNumbers || '<span style="color:#94a3b8;font-size:0.75rem;">Tidak ada data</span>';
}

window.goToPage = function (page) {
    const totalPages = Math.ceil(filteredData.length / itemsPerPage);
    if (page < 1 || page > totalPages) return;
    currentPage = page;
    renderTable();
};

async function loadSiswa() {
    const kelas = document.getElementById('filterKelas').value;
    const status = document.getElementById('filterStatus').value;
    const search = document.getElementById('searchSiswa').value;

    try {
        const { data } = await window.axios.get('/api/siswa', {
            params: { kelas, status, search },
        });
        siswaData = data.data;
        filteredData = [...siswaData];
        currentPage = 1;
        renderTable();
    } catch (error) {
        console.error('Gagal memuat data siswa:', error);
        showToast('Gagal memuat data siswa', 'error');
    }
}

async function loadStats() {
    try {
        const { data } = await window.axios.get('/api/siswa/stats');
        animateNumber('totalSiswa', data.total);
        animateNumber('siswaAktif', data.aktif);
        animateNumber('siswaNonaktif', data.nonaktif);
        animateNumber('totalKelas', data.total_kelas);
    } catch (error) {
        console.error('Gagal memuat statistik:', error);
    }
}

function animateNumber(id, target) {
    const el = document.getElementById(id);
    if (!el) return;

    let current = 0;
    const increment = Math.max(1, Math.ceil(target / 30));
    const stepTime = 800 / 30;

    const update = () => {
        current += increment;
        if (current < target) {
            el.textContent = current;
            setTimeout(update, stepTime);
        } else {
            el.textContent = target;
        }
    };

    update();
}

window.editSiswa = function (id) {
    const siswa = siswaData.find(s => s.id === id);
    if (!siswa) return;

    document.getElementById('modalTitle').textContent = 'Edit Siswa';
    document.getElementById('editId').value = id;
    document.getElementById('nis').value = siswa.nis;
    document.getElementById('nisn').value = siswa.nisn;
    document.getElementById('nama').value = siswa.nama;
    document.getElementById('kelas').value = siswa.kelas;
    document.getElementById('jenisKelamin').value = siswa.jk;
    document.getElementById('noHp').value = siswa.noHp || '';
    document.getElementById('alamat').value = siswa.alamat || '';
    document.getElementById('status').value = siswa.status;
    document.getElementById('modalSiswa').classList.add('show');
};

window.deleteSiswa = async function (id) {
    if (!confirm('Apakah Anda yakin ingin menghapus data siswa ini?')) return;

    try {
        await window.axios.delete(`/api/siswa/${id}`);
        showToast('Data siswa berhasil dihapus', 'success');
        await loadSiswa();
        await loadStats();
    } catch (error) {
        showToast(error.response?.data?.message || 'Gagal menghapus data siswa', 'error');
    }
};

function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.style.cssText = `
        position: fixed; bottom: 2rem; right: 2rem; padding: 0.8rem 1.5rem;
        background: ${type === 'success' ? '#10b981' : '#ef4444'}; color: white;
        border-radius: 12px; font-size: 0.85rem; font-weight: 500;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15); z-index: 999;
        font-family: 'Inter', sans-serif; max-width: 350px;
    `;
    toast.textContent = message;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 3000);
}

document.getElementById('prevPage').addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        renderTable();
    }
});

document.getElementById('nextPage').addEventListener('click', () => {
    const totalPages = Math.ceil(filteredData.length / itemsPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        renderTable();
    }
});

document.getElementById('filterKelas').addEventListener('change', loadSiswa);
document.getElementById('filterStatus').addEventListener('change', loadSiswa);
document.getElementById('searchSiswa').addEventListener('input', debounce(loadSiswa, 300));

document.getElementById('btnTambahSiswa').addEventListener('click', () => {
    document.getElementById('modalTitle').textContent = 'Tambah Siswa';
    document.getElementById('editId').value = '';
    document.getElementById('formSiswa').reset();
    document.getElementById('status').value = 'aktif';
    document.getElementById('modalSiswa').classList.add('show');
});

document.getElementById('modalClose').addEventListener('click', () => {
    document.getElementById('modalSiswa').classList.remove('show');
});

document.getElementById('modalCancel').addEventListener('click', () => {
    document.getElementById('modalSiswa').classList.remove('show');
});

document.getElementById('modalSiswa').addEventListener('click', (e) => {
    if (e.target === e.currentTarget) {
        document.getElementById('modalSiswa').classList.remove('show');
    }
});

document.getElementById('modalSave').addEventListener('click', async () => {
    const id = document.getElementById('editId').value;
    const payload = {
        nis: document.getElementById('nis').value.trim(),
        nisn: document.getElementById('nisn').value.trim(),
        nama_lengkap: document.getElementById('nama').value.trim(),
        kelas: document.getElementById('kelas').value,
        jenis_kelamin: document.getElementById('jenisKelamin').value,
        no_hp: document.getElementById('noHp').value.trim(),
        alamat: document.getElementById('alamat').value.trim(),
        is_active: document.getElementById('status').value === 'aktif',
    };

    if (!payload.nis || !payload.nisn || !payload.nama_lengkap || !payload.kelas || !payload.jenis_kelamin) {
        showToast('Harap isi semua field yang wajib!', 'error');
        return;
    }

    try {
        if (id) {
            await window.axios.put(`/api/siswa/${id}`, payload);
            showToast('Data siswa berhasil diperbarui', 'success');
        } else {
            await window.axios.post('/api/siswa', payload);
            showToast('Data siswa berhasil ditambahkan', 'success');
        }

        document.getElementById('modalSiswa').classList.remove('show');
        await loadSiswa();
        await loadStats();
    } catch (error) {
        const errors = error.response?.data?.errors;
        const message = errors
            ? Object.values(errors).flat().join(', ')
            : (error.response?.data?.message || 'Gagal menyimpan data siswa');
        showToast(message, 'error');
    }
});

document.getElementById('menuToggle').addEventListener('click', () => {
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').classList.toggle('active');
});

document.getElementById('sidebarOverlay').addEventListener('click', () => {
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').classList.remove('active');
});

function debounce(fn, delay) {
    let timer;
    return (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => fn(...args), delay);
    };
}

document.addEventListener('DOMContentLoaded', async () => {
    await loadStats();
    await loadSiswa();
});
