const colors = require("tailwindcss/colors");

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                midnight: {
                    DEFAULT: "#011627",
                    50: "#1593F9",
                    100: "#0686EE",
                    200: "#056ABC",
                    300: "#044E8A",
                    400: "#023259",
                    500: "#011627",
                    600: "#000C16",
                    700: "#00070B",
                    800: "#000000",
                    900: "#000000",
                },
                dianne: {
                    DEFAULT: "#21394B",
                    50: "#87AECA",
                    100: "#76A2C3",
                    200: "#5289B3",
                    300: "#406F92",
                    400: "#31546E",
                    500: "#21394B",
                    600: "#111E28",
                    700: "#000000",
                    800: "#000000",
                    900: "#000000",
                },
                mojo: {  
                    DEFAULT: '#C34A36',
                    50: '#F8E9E6',
                    100: '#F3D7D2',
                    200: '#E8B3AA',
                    300: '#DD8F82',
                    400: '#D16B5B',
                    500: '#C34A36',
                    600: '#9B3B2B',
                    700: '#732C20',
                    800: '#4B1D15',
                    900: '#230D0A'
                },
            },
        },
        fontFamily: {
            inter: ["Inter", "sans-serif"],
            poppins: ["Poppins", "sans-serif"],
        },
        //to get one of the fonts above type font-inter or
        //font-poppins for the one you want as a class
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
