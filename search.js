document.addEventListener('DOMContentLoaded', function loaded() {

    var input = document.querySelector('input');
    // console.log(input)

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
                for(let i = 0; i < response.length; i++)
                { 
                    // console.log(response[i].name);
                    // console.log(value[0]);
                    // console.log(response[i].name[0]);
                    var letter = response[i].name[0];
                    letter = letter.toLowerCase();

                    if(value[0] == letter) {
                        console.log(response[i].name)
                    }
                }
            })
            .catch((error) => console.log(error)) 

    })

})