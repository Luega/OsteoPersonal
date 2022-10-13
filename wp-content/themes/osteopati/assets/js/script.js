// TRIGGER ANIMATION ON SCROLL ----------------------------------------------
function scrollTrigger(selector){
    // Multiple element can have same class/selector,
    // so we are using querySelectorAll
    let els = document.querySelectorAll(selector);
    // The above `querySelectorAll` returns a nodeList,
    // so we are converting it to an array
    els = Array.from(els);
    // Now we are iterating over the elements array
    els.forEach(el => {
        // `addObserver function` will attach the IntersectionObserver to the element
        // We will create this function next
        addObserver(el)
    });
};
function addObserver(el){
    console.log(el);
    // We are creating a new IntersectionObserver instance
    let observer = new IntersectionObserver((entries, observer) => { // This takes a callback function that receives two arguments: the elements list and the observer instance.
    entries.forEach(entry => {
        // `entry.isIntersecting` will be true if the element is visible
        if(entry.isIntersecting) {
            entry.target.classList.add('active');
            // We are removing the observer from the element after adding the active class
            observer.unobserve(entry.target);
            };
        });
    });
    // Adding the observer to the element
    observer.observe(el)
};

scrollTrigger('.myAnimation');