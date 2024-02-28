function customDuty() {
    let item;
    let customValue;

    switch(customValue) {
        case 1:
            item = {
                value: 10000,
                customValue: 100
            }
            break;
        case 2:
            item = {
                value: 20000,
                customValue: 200
            }
            break;
        case 3:
            item = {
                value: 30000,
                customValue: 300
            }
            break;
        case 4:
            item = {
                value: 40000,
                customValue: 400
            }
            break;
        case 5:
            item = {
                value: 50000,
                customValue: 500
            }
            break;
        default:
            item = {
                value: 10000,
                customValue: 100
            }
            break;
    }

    if (item.value > 50000) {
        duty = customValue * 25;
    }
}