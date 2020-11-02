const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        container: {
            center: true,
        },
        extend: {
            opacity: {
                '10': '0.1',
                '20': '0.2',
                '95': '0.95',
            },
            colors: {
                'btn-default' : '#4299e1',
                'btn-dark' : '#2b6cb0',
                'btn-text' : '#ffffff',
                
                
            },
            outline: {
                blue: '5px auto #1a56db'
            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography'),
    ],
};
