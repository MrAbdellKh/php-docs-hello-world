// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth } from "firebase/auth";
import { getFirestore } from "firebase/firestore";
import { getStorage } from "firebase/storage";

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyBcWXSD4pQGBBfl8uhgX91AcigbWftUngI",
    authDomain: "takeit-bd7e5.firebaseapp.com",
    projectId: "takeit-bd7e5",
    storageBucket: "takeit-bd7e5.firebasestorage.app",
    messagingSenderId: "421743456974",
    appId: "1:421743456974:web:55e69c31fb90f90a85d69f",
    measurementId: "G-S17JXJFD9T"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);
const db = getFirestore(app);
const storage = getStorage(app);

export { app, analytics, auth, db, storage }; 