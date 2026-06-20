/**
 * Guru BK Page JavaScript
 * Real-time notification via shared notifications.js module
 */

import './bootstrap';
import { initNotifications } from './notifications';

function initSidebarToggle() {
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    if (!menuToggle || !sidebar || !overlay) return;

    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initSidebarToggle();
    initNotifications(); // real-time notification (polling)
});
