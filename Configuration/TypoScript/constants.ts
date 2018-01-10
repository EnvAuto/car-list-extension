
plugin.tx_carlist_listinformation {
    view {
        # cat=plugin.tx_carlist_listinformation/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:car_list/Resources/Private/Templates/
        # cat=plugin.tx_carlist_listinformation/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:car_list/Resources/Private/Partials/
        # cat=plugin.tx_carlist_listinformation/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:car_list/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_carlist_listinformation//a; type=string; label=Default storage PID
        storagePid =
    }
}
