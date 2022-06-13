function validateDate() {
    let today = new Date();
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    const yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    let startDate = document.forms["book"]["checkin-date"].value;
    let endDate = document.forms["book"]["checkout-date"].value;
    console.log(today);
    console.log(startDate);
    console.log(endDate);

    if(today > startDate)
    {
        alert("currentDate is greater than startDate");
        return false;
    }
    if (startDate > endDate) {
        alert("startDate is greater than endDate");
        return false;
    }
}