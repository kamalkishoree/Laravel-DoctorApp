// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyBnRezhTmooVWe_AYN-ri9gj27SIxKW214",
    authDomain: "takecaremed-b144a.firebaseapp.com",
    databaseURL: "https://takecaremed-b144a.firebasedatabase.app/",
    projectId: "takecaremed-b144a",
    storageBucket: "takecaremed-b144a.appspot.com",
    messagingSenderId: "855891454816",
    appId: "1:855891454816:web:488de02ee3f615c84c8c05",
    measurementId: "G-K2RY140CNC"
});


// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
    const messaging = firebase.messaging();
    messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload.notification.name);
    

    const title = "Hello world is awesome";
    const options = {
        body: payload.notification.body,
        icon: payload.notification.icon,
    };

    return self.registration.showNotification(
        title,
        options,
    );
});