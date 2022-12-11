function atualizarHorario(){
    let date = new Date()
    let currentDate = date.toLocaleDateString()
    let currentHour = date.toLocaleTimeString()

    let h = date.getHours()
    if(h > 5 && h < 12){
        period = 'Bom dia'
    }
    else if(h > 12 && h < 18){
        period = 'Boa tarde'
    }else{
        period = 'Boa noite'
    }

    let w = date.getDay() 
    switch (w){
        case 0:
            weekDay = "Domingo"
            break
        case 1:
            weekDay = "Segunda"
            break
        case 2:
            weekDay = "Terça"
            break
        case 3:
            weekDay = "Quarta"
            break
        case 4:
            weekDay = "Quinta"
            break
        case 5:
            weekDay = "Sexta"
            break
        case 6:
            weekDay = "Sábado"
            break
    }

    
    document.getElementById("current_date").innerHTML = `${currentDate} - ${weekDay}` 
    document.getElementById("current_hour").innerHTML = currentHour
    document.getElementById("period").innerHTML = period
}

setInterval(atualizarHorario, 1000)