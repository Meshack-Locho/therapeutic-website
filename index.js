let navigationEl = document.querySelector(".navigation")
let counters = document.querySelectorAll(".counter")
let counterNumber = 0
let windowHeight = window.innerHeight
let startPoint = 50
let headerBackground = document.querySelector(".header-bg-img")

function startCounters() {
    for (let i = 0; i < counters.length; i++) {
        setInterval(()=>{
            if (counterNumber < 100) {
                counterNumber++
                counters[i].textContent = counterNumber
            }else{
                counterNumber = 100
            }
        }, 150)
        
    }

}

function count() {
    for (let i = 0; i < counters.length; i++) {
        let countersTop = counters[i].getBoundingClientRect().top
    if (countersTop < windowHeight - startPoint) {
        startCounters()
    }else{
        counterNumber = 0
        counters[i].textContent = counterNumber
    }
        
    }
}

function changeNavColor() {
    if (window.scrollY >= 900) {
        navigationEl.style.backgroundColor = "rebeccapurple"
    }else{
        navigationEl.style.backgroundColor = "transparent"
    }
}

console.log(window.innerWidth)
window.addEventListener("scroll", ()=>{
   setTimeout(()=>{
    count()
   }, 1500)
   changeNavColor()
})

window.addEventListener("load", ()=>{
    headerBackground.classList.add("effect")
})

