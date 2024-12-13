let contentArea = document.querySelector(".content")
let sessiobBookingBtn = document.getElementById("session-booking")
let faqBtn = document.getElementById("faq-req")
let articlesBtn = document.getElementById("articles-btn")
let sessionsBtn = document.getElementById("sessions-booked")
let allDynamicButtons = document.querySelectorAll(".user-actions button")
let profContainer = document.querySelector(".prof-container")


sessiobBookingBtn.addEventListener("click", ()=>{
    contentArea.innerHTML = ` <h2>Booking Sessions</h2>
    <form action="booking.php" method="post">
        <label for="session">Choose Therapy Session Type <span style="vertical-align: super;">*</span></label>
        <select name="session" id="session" required>
                <option value="select an option">Select an option</option>
                <option value="Cognitive Behavioral Therapy">Cognitive Behavioral Therapy</option>
                <option value="Psychodynamic Therapy">Psychodynamic Therapy</option>
                <option value="Supportive Therapy">Supportive Therapy</option>
                <option value="Dialectical Behavior Therapy">Dialectical Behavior Therapy</option>
                <option value="Acceptance & Commitment Therapy">Acceptance & Commitment Therapy</option>
                <option value="Interpersonal Therapy">Interpersonal Therapy</option>
        </select>
        <label for="type-of-booking">Select type of booking <span style="vertical-align: super;">*</span></label>
        <select name="booking-type" id="type-of-booking" required>
            <option value="select an option">Select an Option</option>
            <option value="online session">Online Session(Video calls or Zoom)</option>
            <option value="Select and option">Physical Session</option>
        </select>

        <label for="small-exp">Extra Details(optional)</label>
        <textarea name="patient-info" id="small-exp" cols="30" rows="10"></textarea>

        <input type="submit" value="Submit">
    </form>`
})


faqBtn.addEventListener("click", ()=>{
    contentArea.innerHTML = `<div class="faq-questions">
    <h2>FAQs</h2>
    <div class="faq">
     <h4><span>What does therapy Entail</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    <div class="faq">
     <h4><span>What is Cognitive Behavioral Therapy</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    <div class="faq">
     <h4><span>What steps to take after a session</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    <div class="faq">
     <h4><span>What does therapy Entail</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    </div>`
})

let faqsContainers = document.querySelectorAll(".faq")
let allfaqPointers = document.querySelectorAll(".fa-angle-right")


        for (let i = 0; i < faqsContainers.length; i++) {
            faqsContainers[i].addEventListener("click", ()=>{
                faqsContainers[i].classList.toggle("active")
                for (let i = 0; i < allfaqPointers.length; i++) {
                    if (allfaqPointers[i].classList.contains("fa-angle-right")) {
                        allfaqPointers[i].classList.add("fa-angle-down")
                        allfaqPointers[i].classList.remove("fa-angle-right")
                    }else{
                        allfaqPointers[i].classList.remove("fa-angle-down")
                        allfaqPointers[i].classList.add("fa-angle-right")
                    }
                    
                }
            })
            
        }



articlesBtn.addEventListener("click", ()=>{
    contentArea.innerHTML = `<div class="articles">
    <div class="article">
        <a href="">What's affecting your progress?</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero et expedita obcaecati incidunt dolores consequuntur similique eos, libero minus reprehenderit dolor dicta accusamus quisquam cupiditate atque alias! Quibusdam, repudiandae. <a href="">Continue Reading</a></p>
    </div>
    <div class="article">
        <a href="">What's Fueling your anger?</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero et expedita obcaecati incidunt dolores consequuntur similique eos, libero minus reprehenderit dolor dicta accusamus quisquam cupiditate atque alias! Quibusdam, repudiandae. <a href="">Continue Reading</a></p>
    </div>
    <div class="article">
        <a href="">Steps to take after a Session</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero et expedita obcaecati incidunt dolores consequuntur similique eos, libero minus reprehenderit dolor dicta accusamus quisquam cupiditate atque alias! Quibusdam, repudiandae. <a href="">Continue Reading</a></p>
    </div>
   </div>`
})


function loadBookings() {
    let xhr = new XMLHttpRequest()
    xhr.open('GET', 'getbookings.php', true)
    xhr.onload = function () {
        if (xhr.status === 200) {
            contentArea.innerHTML = `<div class="bookings">
            <h2>Bookings</h2>
            ${xhr.responseText}
            </div`
        }
    }
    xhr.send()
}

sessionsBtn.addEventListener("click", ()=>{
    loadBookings()
})

for (let i = 0; i < allDynamicButtons.length; i++) {
    allDynamicButtons[i].addEventListener("click", ()=>{
        if (window.innerWidth <= 800) {
            window.scrollBy(0, profContainer.clientHeight)
        }
    })
    
}

