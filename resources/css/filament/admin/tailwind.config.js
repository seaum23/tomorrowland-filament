import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        
        // Ensure the line below is listed!!!
        "./vendor/chrisreedio/socialment/resources/**/*.blade.php",
    ],
}
