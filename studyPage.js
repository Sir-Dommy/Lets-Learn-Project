
// compenents for the first content in study page
class first extends HTMLElement {
    constructor() {
      super();
    }

 connectedCallback(){
        this.innerHTML =`
        <p>
        &#9733;
        look at these text
        </p>`
    }
}
customElements.define('app-first', first);

// subtopics component
class subs extends HTMLElement {
  constructor() {
    super();
  }

connectedCallback(){
      this.innerHTML =`
      <div class="subtopics">
                                <ol>
                                    <li><a href="#">Subtopic 1</a></li>
                                    <li><a href="#">Subtopic 2</a></li>
                                    <li><a href="#">Subtopic 3</a></li>
                                    <li><a href="#">Subtopic 4</a></li>
                                </ol>
                            </div>`
  }
}
customElements.define('app-subs', subs);

let menu = document.querySelector('#menu-btn');
let topics = document.querySelector('.topics');

menu.onclick = () =>{
    //  ;
    menu.classList.toggle('fa-times');
    topics.classList.toggle('active');
    document.body.classList.toggle('active');

};

//Action of remove button
document.querySelector('.remove').onclick = () =>{
  alert('Are you sure you want to remove this course?')
  menu.classList.toggle('fa-times');
  topics.classList.toggle('active');
}