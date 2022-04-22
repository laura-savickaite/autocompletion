document.addEventListener('DOMContentLoaded', function loaded() {

    var input = document.querySelector('input');
    // console.log(input)
    var ul1 = document.getElementsByClassName('resultats-list-one');
    var ul2 = document.getElementsByClassName('resultats-list-two');


                    
    input.addEventListener('keyup', function(){

        // pour supprimer la liste à chaque fois
        ul1[0].innerHTML = ""
        ul2[0].innerHTML = ""

        var value = input.value;
        value = value.toLowerCase()


            fetch('searchController.php',{
                method: 'POST',
                body: value
            })
            .then ((response) => response.json())
            .then ((response) => {

                if(!(value.length == " ")){
                    
                    if (response.length == 0){
                        const resultNone = document.createElement('li')
                        resultNone.classList.add('result-item')
                        resultNone.innerHTML = "No results found."
                        ul1[0].appendChild(resultNone)   

                    }
                    else 
                    {
                        for(let i = 0; i < response.length; i++)
                        { 
                            var letter = response[i].name[0];
                            letter = letter.toLowerCase();

                            let letterS = response[i].name 
                            letterS = letterS.toLowerCase();


                            if(letterS.startsWith(value) == true) 
                            {
                                var letters = response[i].name
                                const a = document.createElement('a')
                                const resultItem = document.createElement('li')
                                resultItem.classList.add('result-item')
                                a.href = "element.php/"+ response[i].id
                                resultItem.innerHTML = letters
                                ul1[0].appendChild(a) 
                                a.appendChild(resultItem) 

                            }
                            else
                            {
                                const a = document.createElement('a')
                                const resultItems = document.createElement('li')
                                resultItems.classList.add('result-item')
                                a.href = "element.php/"+ response[i].id
                                resultItems.innerHTML = response[i].name
                                ul2[0].appendChild(a)
                                a.appendChild(resultItems) 
                            }
                        }                       
                    }
                                  
                }

            })
            .catch((error) => console.log(error)) 

    })

})