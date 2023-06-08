
let correct = document.querySelectorAll(".nous input");

console.log("ouloulou")

// correct[0].classList.add("form-success")

correct[0].addEventListener("input", function(){
    console.log(correct[0].value)
})

correct[0].addEventListener("input" , function(){
    console.log(correct[0].value)
    if (correct[0].value.length >=5 && correct[0].value.length <=20) {
        correct[0].classList.add("form-success")
        correct[0].classList.remove("form-error")
    } else {
        correct[0].classList.add("form-error")
        correct[0].classList.remove("form-success")
    }
})
