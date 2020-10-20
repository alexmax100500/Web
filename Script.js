var regexp = new RegExp('^\-?[0-9]+[.,]?[0-9]*$')
var form = document.querySelector('.validatedform')
form.addEventListener('submit', function(event){
    removeValidation()
    var fields = new Array()
    fields[0] = document.querySelector('input[name="x"]:checked')
    if(fields[0] == null){
      event.preventDefault()
      var error = document.createElement("div")
      fields[0] = document.querySelector('input[name="x"]')
      error.className="error"
      error.style.color = "red"
      error.innerHTML = "Invalid Value"
      fields[0].parentElement.parentElement.insertBefore(error, fields[0].parentElement)
    }
    // if(fields[0]==null){
    //   error.className="error"
    //   error.style.color = "red"
    //   error.innerHTML = "Empty field"
    //   fields[i].parentElement.parentElement.insertBefore(error, fields[i].parentElement)
    // }
    fields[1] = document.querySelector('[name="y"]')
    fields[2] = document.querySelector('select[name="r"]')
    // console.log(fields[2].value)
    // console.log(fields.length)
    for(let i =0; i<fields.length; i++){
      // regexp.lastIndex=0
      // console.log(regexp.test(fields[i].value))
      regexp.lastIndex=0
      console.log(fields[i] == null)
      if(fields[i] == null){
        var error = document.createElement("div")
        error.className="error"
        error.style.color = "red"
        error.innerHTML = "Invalid Value"
        fields[i].parentElement.parentElement.insertBefore(error, fields[i].parentElement)

      }
      //console.lo
      if(!regexp.test(fields[i].value)){
        event.preventDefault()
        var error = document.createElement("div")
			  error.className="error"
        error.style.color = "red"
			  error.innerHTML = "Invalid Value"
			  fields[i].parentElement.parentElement.insertBefore(error, fields[i].parentElement)
      }
    }
    if((fields[1].value < -3) || (fields[1].value > 5)){
      event.preventDefault()
      var error = document.createElement("div")
      error.className="error"
      error.style.color = "red"
      error.innerHTML = "Invalid Value"
      fields[1].parentElement.parentElement.insertBefore(error, fields[1].parentElement)


    }
  })

  var removeValidation = function () {
    var errors = form.querySelectorAll('.error')

    for (let i = 0; i < errors.length; i++) {
      errors[i].remove()
    }
  }
