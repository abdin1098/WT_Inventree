
document.addEventListener('DOMContentLoaded', function () {

    // Current Date
    const dateElement = document.getElementById('currentDate');

    dateElement.textContent = new Date().toLocaleDateString('en-US', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });

    // Sidebar Toggle
    document.getElementById('menuToggle').addEventListener('click', function () {

        const sidebar = document.getElementById('sidebar');

        if (window.innerWidth <= 600) {
            sidebar.classList.toggle('mobile-open');
        } else {
            sidebar.classList.toggle('collapsed');
        }

    });

    // Period Filter
    const periodButtons = document.querySelectorAll('.period-filter button');
    const periodLabel = document.getElementById('periodLabel');

    periodButtons.forEach(button => {

        button.addEventListener('click', function () {

            periodButtons.forEach(btn => btn.classList.remove('selected'));

            this.classList.add('selected');

            const period = this.dataset.period;

            const labels = {
                Year: 'This year',
                Month: 'Last month',
                Week: 'This week',
                Today: 'Today'
            };

            periodLabel.textContent = labels[period];

        });

    });

    // Gross Profit Visibility
    const toggleProfit = document.getElementById('toggleProfit');
    const profitValue = document.getElementById('profitValue');

    let visible = false;

    toggleProfit.addEventListener('click', function () {

        visible = !visible;

        profitValue.textContent = visible ? 'Rs 0' : '••••';

        toggleProfit.classList.toggle('bi-eye');
        toggleProfit.classList.toggle('bi-eye-slash');

    });

    // Top Products Filter
    const metricButtons = document.querySelectorAll('.mini-filter button');

    metricButtons.forEach(button => {

        button.addEventListener('click', function () {

            metricButtons.forEach(btn => btn.classList.remove('active'));

            this.classList.add('active');

        });

    });

});
