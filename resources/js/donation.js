// Seleksi semua tombol dalam div donation-type
document.querySelectorAll('.donation-type button').forEach(button => {
    button.addEventListener('click', () => {
        // Hapus kelas aktif dari semua tombol
        document.querySelectorAll('.donation-type button').forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-800');
        });

        // Tambahkan kelas aktif ke tombol yang diklik
        button.classList.remove('bg-gray-200', 'text-gray-800');
        button.classList.add('bg-blue-600', 'text-white');
    });
});

// Seleksi semua tombol dalam div donation
document.querySelectorAll('.donation button').forEach(button => {
    button.addEventListener('click', () => {
        // Hapus kelas aktif dari semua tombol
        document.querySelectorAll('.donation button').forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-800');
        });

        // Tambahkan kelas aktif ke tombol yang diklik
        button.classList.remove('bg-gray-200', 'text-gray-800');
        button.classList.add('bg-blue-600', 'text-white');
    });
});