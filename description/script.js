let navbar=document.querySelector('.header .navbar')


document.querySelector('#menu-btn').onclick = () => {

    navbar.classList.toggle('active');
}
window.onscroll =() => {

    navbar.classList.remove('active');
}

window.addEventListener('DOMContentLoaded', () => {
    const phrases = ['Greeting guests to the province', 'Extending a warm welcome to visitors', 'Embracing tourists with open arms', 'Rolling out the red carpet for visitors', 'Inviting guests to experience the province', 'Embracing travelers with hospitality', 'Welcoming tourists to explore the province', 'Providing a friendly introduction to the province'];
    const randomIndex = Math.floor(Math.random() * phrases.length);
    const randomPhrase = phrases[randomIndex];
    document.getElementById('randomText').textContent = randomPhrase;
});
