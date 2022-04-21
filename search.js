document.addEventListener('DOMContentLoaded', function loaded() {

    var input = document.querySelector('input');
    // console.log(input)
    var ul1 = document.getElementsByClassName('resultats-list-one');
    var ul2 = document.getElementsByClassName('resultats-list-two');
    console.log(ul1[0])
    console.log(ul2[0])


    input.addEventListener('keyup', function(){

        var value = input.value;
        value = value.toLowerCase()


            fetch('searchController.php',{
                method: 'POST',
                body: value
            })
            .then ((response) => response.json())
            .then ((response) => {

                // pour supprimer la liste à chaque fois
                ul1[0].innerHTML = ""
                ul2[0].innerHTML = ""

                for(let i = 0; i < response.length; i++)
                { 
                    var letter = response[i].name[0];
                    letter = letter.toLowerCase();


                    if(value[0] == letter) 
                    {
                        console.log(value[0])
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
                        // console.log('nn')
                        // console.log(response[i].name)
                    }
                        
                }
            })
            .catch((error) => console.log(error)) 

    })

})