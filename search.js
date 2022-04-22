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
                        console.log('ras')
                    }
                    else 
                    {
                        for(let i = 0; i < response.length; i++)
                        { 
                            console.log(value)

                            var letter = response[i].name[0];
                            letter = letter.toLowerCase();

                            let letterS = response[i].name 
                            letterS = letterS.toLowerCase();


                            if(letterS.startsWith(value) == true) 
                            {
                                var letters = response[i].name
                                const resultItem = document.createElement('li')
                                resultItem.classList.add('result-item')
                                resultItem.innerHTML = letters
                                ul1[0].appendChild(resultItem)   
                                console.log(letters)                                 
                                
                            }
                            else
                            {
                                console.log(response[i].name);
                                const resultItems = document.createElement('li')
                                resultItems.classList.add('result-item')
                                resultItems.innerHTML = response[i].name
                                ul2[0].appendChild(resultItems)
                            }
                        }                       
                    }
                                  
                }

            })
            .catch((error) => console.log(error)) 

    })

})