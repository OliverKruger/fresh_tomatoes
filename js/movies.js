export default class Movies {
    constructor() {
        this.data = {
            password: "Fresh_Tomatoes"
        }

        this.rootElem = document.querySelector('.movies')
        this.filter = this.rootElem.querySelector('.filter')
        this.items = this.rootElem.querySelector('.items')

        this.nameSearch = this.filter.querySelector('.nameSearch')
    }

    async init() {
        this.nameSearch.addEventListener('input', () => {
            if (this.nameSearch.value.length >= 3){
                this.render();
            }else if(this.nameSearch.value.length === 0){
                this.render();
            }else if(this.nameSearch.value.length >= 0) {
                this.render();
            }

        });

        await this.render();
    }

    async render() {
        const data = await this.getData();
        console.log(data)

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for (const item of data) {

            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
            <div class="card h-100 ">
                <img src="uploads/${item.movImage}" class="card-img-top">
                <div class="card-body d-flex flex-column justify-content-between ">
                <h5 class="card-title">${item.movName}</h5>
                <p class="card-text pb-2 ">${item.movDate}</p>
                <p class="card-text pb-2 ">${item.movActors}</p>
                <div class="age ">
                <p class="card-text age_reg pb-2 ">Age:  </p>
                <p class="card-text alder_bold pb-4 "> ${item.movAge}</p>
                </div> 
           
                <a href="movie.php?movId=${item.movId}" class="btn btn-primary  text-white middle ">Se mere info</a>
                </div>
            </div>
            `;

            row.appendChild(col);

        }

        this.items.innerHTML = '';
        this.items.appendChild(row)



    }

    async getData() {

        this.data.nameSearch = this.nameSearch.value;
        this.data.actorsSearch = this.nameSearch.value;
        this.data.ageSearch = this.nameSearch.value;
        this.data.genreSearch = this.nameSearch.value;
        this.data.rateSearch = this.nameSearch.value;







        const response = await fetch('movieApi.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });

        return await response.json();


    }
}