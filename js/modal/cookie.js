
// Not sure but if this dont work on all pages add page=/ to target the root of website

const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split('; ')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`;
    },
};

const storageType = cookieStorage;
const consentPropertyName = 'accepted_consent';

const showModalPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    // Whole body hide
    const wrapper = document.getElementById('wrapper');
    const HTMLLock = document.getElementById('HTMLTAG');

    //variables buttons
    const acceptBtn = document.getElementById('accept-cookies');
    const changeBtn = document.getElementById('change-settings');
    const detailedBtn = document.getElementById('detailed-button');
    const cancelBtn = document.getElementById('cancel-button');
    const acceptBtn2 = document.getElementById('accept-button');
    const disableBtn = document.querySelectorAll('.modal-button .active-button')
    const enableBtn = document.querySelectorAll('.modal-button .inactive-button')

    // modal popups
    const modalPopup = document.getElementById('modal-holder');
    const changeSettingsPopup = document.getElementById('change-settings-modal');
    const tablePopup = document.getElementById('table-container')

    //setting Func for setting the event
    const acceptTheCookieFunc = event => {
        saveToStorage(storageType);
        modalPopup.style.display = "none";
        HTMLLock.classList.remove("HTMLTAGscrollLock");
        console.log("Accepted Cookie");
    }
    //calling the Func on the click event
    acceptBtn.addEventListener('click', acceptTheCookieFunc);

    if (showModalPopup(storageType)) {
        modalPopup.classList.add("set-modal-block");
        HTMLLock.classList.add("HTMLTAGscrollLock");
    } else {
        modalPopup.style.display = "none";
    }


    /*
        - lock body when modal shows
        - unlock when on change Settings
        - if canceled lock again
        - if accepted unlock
    */

    //CHANGE SETTINGS POPUP

    //ChangeSettingsPopupFunc
    const showChangeSettingsFunc = event => {
        changeSettingsPopup.style.display = "block";
        wrapper.classList.add('hideWrapper');
    }
    //SHows Change settings popup
    changeBtn.addEventListener('click', showChangeSettingsFunc);

    //Switch classes enable disable
    const disableBtn1 = document.getElementById("disable1");
    const enableBtn1 = document.getElementById("enable1");

    const togDisBtn1Class = event => {
        if (disableBtn1.classList.contains("active-button")) {

        } else {
            disableBtn1.classList.toggle("active-button");
            disableBtn1.classList.toggle("inactive-button");
            enableBtn1.classList.toggle("inactive-button");
            enableBtn1.classList.toggle("active-button");
        }
    }
    disableBtn1.addEventListener('click', togDisBtn1Class);

    const togEnBtn1Class = event => {
        if (enableBtn1.classList.contains("active-button")) {

        } else {
            disableBtn1.classList.toggle("active-button");
            disableBtn1.classList.toggle("inactive-button");
            enableBtn1.classList.toggle("inactive-button");
            enableBtn1.classList.toggle("active-button");
        }
    }
    enableBtn1.addEventListener('click', togEnBtn1Class);

    const disableBtn2 = document.getElementById("disable2");
    const enableBtn2 = document.getElementById("enable2");

    const togDisBtn2Class = event => {
        if (disableBtn2.classList.contains("active-button")) {

        } else {
            disableBtn2.classList.toggle("active-button");
            disableBtn2.classList.toggle("inactive-button");
            enableBtn2.classList.toggle("inactive-button");
            enableBtn2.classList.toggle("active-button");
        }
    }
    disableBtn2.addEventListener('click', togDisBtn2Class);

    const togEnBtn2Class = event => {
        if (enableBtn2.classList.contains("active-button")) {

        } else {
            disableBtn2.classList.toggle("active-button");
            disableBtn2.classList.toggle("inactive-button");
            enableBtn2.classList.toggle("inactive-button");
            enableBtn2.classList.toggle("active-button");
        }
    }
    enableBtn2.addEventListener('click', togEnBtn2Class);

    const disableTableBtn1 = document.getElementById("disableTable1");
    const enableTableBtn1 = document.getElementById("enableTable1");

    const togDisTableBtn1Class = event => {
        if (disableTableBtn1.classList.contains("active-button")) {

        } else {
            disableTableBtn1.classList.toggle("active-button");
            disableTableBtn1.classList.toggle("inactive-button");
            enableTableBtn1.classList.toggle("inactive-button");
            enableTableBtn1.classList.toggle("active-button");
        }
    }
    disableTableBtn1.addEventListener('click', togDisTableBtn1Class);

    const togEnTableBtn1Class = event => {
        if (enableTableBtn1.classList.contains("active-button")) {

        } else {
            disableTableBtn1.classList.toggle("active-button");
            disableTableBtn1.classList.toggle("inactive-button");
            enableTableBtn1.classList.toggle("inactive-button");
            enableTableBtn1.classList.toggle("active-button");
        }
    }
    enableTableBtn1.addEventListener('click', togEnTableBtn1Class);

    const disableTableBtn2 = document.getElementById("disableTable2");
    const enableTableBtn2 = document.getElementById("enableTable2");

    const togDisTableBtn2Class = event => {
        if (disableTableBtn2.classList.contains("active-button")) {

        } else {
            disableTableBtn2.classList.toggle("active-button");
            disableTableBtn2.classList.toggle("inactive-button");
            enableTableBtn2.classList.toggle("inactive-button");
            enableTableBtn2.classList.toggle("active-button");
        }
    }
    disableTableBtn2.addEventListener('click', togDisTableBtn2Class);

    const togEnTableBtn2Class = event => {
        if (enableTableBtn2.classList.contains("active-button")) {

        } else {
            disableTableBtn2.classList.toggle("active-button");
            disableTableBtn2.classList.toggle("inactive-button");
            enableTableBtn2.classList.toggle("inactive-button");
            enableTableBtn2.classList.toggle("active-button");
        }
    }
    enableTableBtn2.addEventListener('click', togEnTableBtn2Class);

    const disableTableBtn3 = document.getElementById("disableTable3");
    const enableTableBtn3 = document.getElementById("enableTable3");

    const togDisTableBtn3Class = event => {
        if (disableTableBtn3.classList.contains("active-button")) {

        } else {
            disableTableBtn3.classList.toggle("active-button");
            disableTableBtn3.classList.toggle("inactive-button");
            enableTableBtn3.classList.toggle("inactive-button");
            enableTableBtn3.classList.toggle("active-button");
        }
    }
    disableTableBtn3.addEventListener('click', togDisTableBtn3Class);

    const togEnTableBtn3Class = event => {
        if (enableTableBtn3.classList.contains("active-button")) {

        } else {
            disableTableBtn3.classList.toggle("active-button");
            disableTableBtn3.classList.toggle("inactive-button");
            enableTableBtn3.classList.toggle("inactive-button");
            enableTableBtn3.classList.toggle("active-button");
        }
    }
    enableTableBtn3.addEventListener('click', togEnTableBtn3Class);

    const disableTableBtn4 = document.getElementById("disableTable4");
    const enableTableBtn4 = document.getElementById("enableTable4");

    const togDisTableBtn4Class = event => {
        if (disableTableBtn4.classList.contains("active-button")) {

        } else {
            disableTableBtn4.classList.toggle("active-button");
            disableTableBtn4.classList.toggle("inactive-button");
            enableTableBtn4.classList.toggle("inactive-button");
            enableTableBtn4.classList.toggle("active-button");
        }
    }
    disableTableBtn4.addEventListener('click', togDisTableBtn4Class);

    const togEnTableBtn4Class = event => {
        if (enableTableBtn4.classList.contains("active-button")) {

        } else {
            disableTableBtn4.classList.toggle("active-button");
            disableTableBtn4.classList.toggle("inactive-button");
            enableTableBtn4.classList.toggle("inactive-button");
            enableTableBtn4.classList.toggle("active-button");
        }
    }
    enableTableBtn4.addEventListener('click', togEnTableBtn4Class);

    const disableTableBtn5 = document.getElementById("disableTable5");
    const enableTableBtn5 = document.getElementById("enableTable5");

    const togDisTableBtn5Class = event => {
        if (disableTableBtn5.classList.contains("active-button")) {

        } else {
            disableTableBtn5.classList.toggle("active-button");
            disableTableBtn5.classList.toggle("inactive-button");
            enableTableBtn5.classList.toggle("inactive-button");
            enableTableBtn5.classList.toggle("active-button");
        }
    }
    disableTableBtn5.addEventListener('click', togDisTableBtn5Class);

    const togEnTableBtn5Class = event => {
        if (enableTableBtn5.classList.contains("active-button")) {

        } else {
            disableTableBtn5.classList.toggle("active-button");
            disableTableBtn5.classList.toggle("inactive-button");
            enableTableBtn5.classList.toggle("inactive-button");
            enableTableBtn5.classList.toggle("active-button");
        }
    }
    enableTableBtn5.addEventListener('click', togEnTableBtn5Class);

    //Show Table
    var x = true;
    const showTable = event => {
        if (x === true) {
            detailedBtn.innerHTML = "Hide Detailed Preferences";
            tablePopup.classList.add('showTable');
            tablePopup.classList.remove('hideTable');
            x = false;
            console.log(x);
        } else if (x === false) {
            detailedBtn.innerHTML = "Show Detailed Preferences";
            tablePopup.classList.remove('showTable');
            tablePopup.classList.add('hideTable');
            x = true;
            console.log(x);
        }
    }

    detailedBtn.addEventListener('click', showTable);

    //Expand table cells
    const leadForensicsExpandBtn = document.getElementById('leadForensicsTable');
    const leadForensicsExpandedCell = document.getElementById('leadForensicsCell');

    const ExpandLF = event => {
        if (leadForensicsExpandBtn.innerHTML === "+ Lead Forensics") {
            leadForensicsExpandBtn.innerHTML = "- Lead Forensics";
            leadForensicsExpandedCell.classList.remove("hideTable");
        } else {
            leadForensicsExpandBtn.innerHTML = "+ Lead Forensics";
            leadForensicsExpandedCell.classList.add("hideTable");
        }
    }
    leadForensicsExpandBtn.addEventListener('click', ExpandLF);

    const hotjarExpandBtn = document.getElementById('hotjarTable');
    const hotjarExpandedCell = document.getElementById('hotjarCell');

    const ExpandHJ = event => {
        if (hotjarExpandBtn.innerHTML === "+ Hotjar Ltd") {
            hotjarExpandBtn.innerHTML = "- Hotjar Ltd";
            hotjarExpandedCell.classList.remove("hideTable");
        } else {
            hotjarExpandBtn.innerHTML = "+ Hotjar Ltd";
            hotjarExpandedCell.classList.add("hideTable");
        }
    }
    hotjarExpandBtn.addEventListener('click', ExpandHJ);

    const facebookExpandBtn = document.getElementById('facebookTable');
    const facebookExpandedCell = document.getElementById('facebookCell');

    const ExpandFB = event => {
        if (facebookExpandBtn.innerHTML === "+ Facebook Inc.") {
            facebookExpandBtn.innerHTML = "- Facebook Inc.";
            facebookExpandedCell.classList.remove("hideTable");
        } else {
            facebookExpandBtn.innerHTML = "+ Facebook Inc.";
            facebookExpandedCell.classList.add("hideTable");
        }
    }
    facebookExpandBtn.addEventListener('click', ExpandFB);

    const googleExpandBtn = document.getElementById('googleTable');
    const googleExpandedCell = document.getElementById('googleCell');

    const ExpandGO = event => {
        if (googleExpandBtn.innerHTML === "+ Google Inc.") {
            googleExpandBtn.innerHTML = "- Google Inc.";
            googleExpandedCell.classList.remove("hideTable");
        } else {
            googleExpandBtn.innerHTML = "+ Google Inc.";
            googleExpandedCell.classList.add("hideTable");
        }
    }
    googleExpandBtn.addEventListener('click', ExpandGO);

    const tawkExpandBtn = document.getElementById('tawkTable');
    const tawkExpandedCell = document.getElementById('tawkCell');

    const ExpandTT = event => {
        if (tawkExpandBtn.innerHTML === "+ Tawk.to Inc.") {
            tawkExpandBtn.innerHTML = "- Tawk.to Inc.";
            tawkExpandedCell.classList.remove("hideTable");
        } else {
            tawkExpandBtn.innerHTML = "+ Tawk.to Inc.";
            tawkExpandedCell.classList.add("hideTable");
        }
    }
    tawkExpandBtn.addEventListener('click', ExpandTT);

    //Cancel and close settings
    //CloseSettingsFunc
    const closeSettingsFunc = event => {
        changeSettingsPopup.style.display = "none";
        wrapper.classList.remove("hideWrapper");
    }
    //closes Change settings popup
    cancelBtn.addEventListener('click', closeSettingsFunc);

    const acceptFromSettings = event => {
        saveToStorage(storageType);
        changeSettingsPopup.style.display = "none";
        wrapper.classList.remove("hideWrapper");
        modalPopup.style.display = "none";
        HTMLLock.classList.remove("HTMLTAGscrollLock");
        console.log("Accepted Cookie");
    }

    acceptBtn2.addEventListener('click', acceptFromSettings);
}
