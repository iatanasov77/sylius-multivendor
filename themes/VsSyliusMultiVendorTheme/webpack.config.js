const Encore = require( '@symfony/webpack-encore' );

Encore
    .setOutputPath( 'public/build/vs-sylius-multivendor-theme' )
    .setPublicPath( '/build/vs-sylius-multivendor-theme' )
  
    .disableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSassLoader()
    .enableSourceMaps( ! Encore.isProduction() )
    .enableVersioning( Encore.isProduction() )
    
    /**
     * Add Entries
     */
     .autoProvidejQuery()
     .configureFilenames({
        js: '[name].js?[contenthash]',
        css: '[name].css?[contenthash]',
        assets: '[name].[ext]?[hash:8]'
    })
     
     
    .addEntry( 'app', './themes/VsSyliusMultiVendorTheme/assets/entry.js' )
;

const config = Encore.getWebpackConfig();
config.name = 'SyliusMultiVendorTheme';

module.exports = config;
