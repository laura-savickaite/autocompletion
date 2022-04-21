document.addEventListener('DOMContentLoaded', function loaded() {

    var input = document.querySelector('input');
    // console.log(input)
    var ul1 = document.getElementsByClassName('resultats-list-one');
    var ul2 = document.getElementsByClassName('resultats-list-two');
    console.log(ul1[0])
    console.log(ul2[0])

    input.addEventListener('keyup', function(){

        var value = input.value;
        // console.log(value);


            fetch('searchController.php',{
                method: 'POST',
                body: value
            })
            .then ((response) => response.json())
            .then ((response) => {
                // console.log(response)
                const results = []

                for(let i = 0; i < response.length; i++)
                { 
                    // console.log(response[i].name);
                    // console.log(value[0]);
                    // console.log(response[i].name[0]);
                    var letter = response[i].name[0];
                    letter = letter.toLowerCase();

                    if(value[0] == letter) {
                        var result = response[i].name
                        const resultItem = document.createElement('li')
                        resultItem.classList.add('result-item')
                        resultItem.innerHTML = result
                        ul1[0].appendChild(resultItem)
                        
                        console.log(result);

                        // result.push(results);
                        // result.forEach(element => {
                        //     element.push(results);  
                        // });
                        // console.log(results);

                        // result.forEach((name) => {
                        //     console.log(name)
                        //     // const option = document.createElement("option");
                        //     // option.innerHTML = pokeType
                        //     // filter.appendChild(option);
                        // });

                        // resultItem.appendChild(response[i].name)
                        // console.log(response[i].name)
                        // console.log('oui')
                    }
                    else
                    {
                        // const resultItem = document.createElement('li')
                        // resultItem.classList.add('result-item')
                        // resultItem.appendChild(response[i].name)
                        // console.log('nn')
                        // console.log(response[i].name)
                    }
                }
            })
            .catch((error) => console.log(error)) 

    })

})