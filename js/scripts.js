document.addEventListener('DOMContentLoaded', function () {
    const dropdownLinks = document.querySelectorAll('.mobile-tab-link');
    const currentTabText = document.getElementById('currentTabText');

    dropdownLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const newText = this.getAttribute('data-tab-text');
            currentTabText.textContent = newText;

            // Hide all tab panes
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));

            // Activate selected pane
            const targetPane = document.querySelector(targetId);
            if (targetPane) {
                targetPane.classList.add('show', 'active');
            }

            // Update desktop nav links (optional)
            document.querySelectorAll('.nav-pills .nav-link').forEach(link => {
                if (link.getAttribute('href') === targetId) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Close dropdown
            const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('mobileTabDropdown'));
            if (dropdown) dropdown._element.click();
        });
    });
});


