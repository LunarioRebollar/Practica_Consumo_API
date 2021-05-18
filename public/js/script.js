const app = new Vue({
    el: '#main',
   
    data: {
        result: " ",
        responseAvailable: false,
        apiKey: "1bd3596782msh17ec85330a915c3p1d7057jsna1b508746959"
    },

    methods: {
        fetchAPIData() {
            this.responseAvailable = false;
            fetch("https://geek-jokes.p.rapidapi.com/api?format=json", {
	               "method": "GET",
	               "headers": {
		          "x-rapidapi-key": this.apiKey,
		          "x-rapidapi-host": "geek-jokes.p.rapidapi.com"
	           }
            })
            .then(response => { 
                if(response.ok){
                    return response.json()    
                } else{
                    alert("Server returned " + response.status + " : " + response.statusText);
                }                
            })
            .then(response => {
                this.result = response.joke; 
                this.responseAvailable = true;
            })
            .catch(err => {
                console.error(err);
            });
        }
    }
})