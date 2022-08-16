setTimeout(() => {
    console.log("Delayed for 1 second.");
    const menu = document.getElementById('menuToggle');
    menu.addEventListener('change', () => {
        const isChecked = menu.checked;
        if (isChecked) {
            console.log('hej');
        } else {
            console.log('miw');
        }
    })

}, 1000)