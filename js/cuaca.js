const city = document.getElementById('city');
const sendCity = document.getElementById('send');
const current = document.getElementById('currentWeather');
const forecast = document.getElementById('forecast');
const weatherContainer = document.querySelector('#weatherContainer');
const forecastContainer = document.querySelector('#forecastContainer');

current.addEventListener('click',weatherView);
forecast.addEventListener('click',forecastView);
sendCity.addEventListener('click',postCity);

function weatherView(){
    if(current.checked == true){
        if(city.value){
            weatherContainer.style.display = "block";
            // current.checked = true;
        }
    }else{
        weatherContainer.style.display = "none";
        // current.checked = false;
    }
}

function forecastView(){
    if(forecast.checked == true){
        if(city.value){
            forecastContainer.style.display = "block";
            // current.checked = true;
        }
    }else{
        forecastContainer.style.display = "none";
        // current.checked = false;
    }
}

function postCity(){
    if(city.value){
        weatherContainer.style.display = "block";
        // current.checked = true;
    }else{
        weatherContainer.style.display = "none";
        // current.checked = false;
    }
    
    let api = "https://api.openweathermap.org/data/2.5/";
    let key = "086bc073b93959429439a727ff1d4dff";

    fetch(api + 'weather?q=' + city.value + '&appid=' + key + '&units=metric')
        .then(response => response.json())
        .then(response => {
            // console.log(response);
            let icon = response.weather[0].icon;
            weatherContainer.innerHTML = `
                <div class="cardBody">
                    <h2 class="title">Kota ${city.value}</h2>
                    <p>
                        Suhu Saat Ini : ${response.main.temp} °C
                        <br>
                        Terasa Seperti : ${response.main.feels_like} °C
                        <br>
                        Tertinggi : ${response.main.temp_max} °C, Terendah : ${response.main.temp_min} °C
                        <br>
                        <br>
                        Ramalan Cuaca :
                    </p>
                    <br> <p style='margin-left:4%;'>${response.weather[0].description} <img class="castIcon" src="https://openweathermap.org/img/wn/${icon}@2x.png" alt="weather"> </p>
                </div>
            `;
        });
    
    fetch(api + 'forecast?q=' + city.value + '&appid=' + key + '&units=metric')
        .then(response => response.json())
        .then(response =>{
            console.log(response);
            let h2 = document.querySelector('#forecastContainer #cardBody #title');
            let container = document.getElementById('body');
            let card = "";
                
            for(let i = 0; i < response.list.length; i++){
                let _list = response.list[i]; //w
                let _date = new Date(_list.dt_txt);
                let _month = [
                    'Jan', 'Feb', 'Mar' , 'Apr', 
                    'Mei', 'Jun', 'Jul', 'Agus',
                    'Sept', 'Okt', 'Nov', 'Des'
                ];

                let dt = _date.getUTCDate() + ' ' + _month[_date.getUTCMonth()] + ' ' + _date.getFullYear();

                card += `
                <tr>
                    <td><img class="castIcon" src="https://openweathermap.org/img/wn/${_list.weather[0].icon}@2x.png" alt="weather"></td>
                    <td>
                        <i class="" aria-hidden="true"></i> ${dt}<br>
                        <i class="" aria-hidden="true"> ${dt_txt.substring(11, 16)}</i>
                    </td>
                    <td>
                        <h3 class="info" style="margin: 0 5px 0 5px"> ${_list.main.temp} °C <br><small>Tertinggi : ${_list.main.temp_max}°C <br> Terendah : ${_list.main.temp_min}°C</small> </h3>
                    </td>
                    <td> ${_list.weather[0].main} <br> ${_list.weather[0].description}</td>
                    <td></td>
                </tr>
                `;
            }
            h2.innerHTML = "Kota " + city.value;
            container.innerHTML = card;
        });
}