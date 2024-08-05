document.addEventListener('DOMContentLoaded', () => {
    fetch('achievements.php')
        .then(response => response.json())
        .then(data => {
            const certificatesContainer = document.getElementById('ac-certificates-container');
            const badgesContainer = document.getElementById('ac-badges-container');

            data.certificates.forEach(certificate => {
                const certificateElement = document.createElement('div');
                certificateElement.className = 'certificate';

                certificateElement.innerHTML = `
                    <a href="${certificate.link}" target="_blank">
                        <img src="${certificate.icon}" alt="${certificate.name}">
                        <div class="details">
                            <h3>${certificate.name}</h3>
                            <p>${certificate.description}</p>
                        </div>
                    </a>
                `;

                certificatesContainer.appendChild(certificateElement);
            });

            data.badges.forEach(badge => {
                const badgeElement = document.createElement('div');
                badgeElement.className = 'badge';

                badgeElement.innerHTML = `
                    <img src="${badge.icon}" alt="${badge.name}">
                    <div class="details">
                        <h3>${badge.name}</h3>
                        <p>${badge.description}</p>
                    </div>
                    <div class="status ${badge.earned ? '' : 'not-earned'}">
                        ${badge.earned ? 'Earned' : 'Not Earned'}
                    </div>
                `;

                badgesContainer.appendChild(badgeElement);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});
