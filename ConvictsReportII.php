<?php

declare(strict_types=1);

namespace Kerry;

// use Fisharebest\Webtrees\Family;
// use Fisharebest\Webtrees\Http\RequestHandlers\ReportSetupPage;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Individual;
use Fisharebest\Webtrees\Menu;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleReportInterface;
use Fisharebest\Webtrees\Module\ModuleReportTrait;


/**
 * Class Convict2ReportModule
 */
 
class ConvictsReportII extends AbstractModule implements  ModuleReportInterface, ModuleCustomInterface{
	
	use ModuleReportTrait;
	use ModuleCustomTrait;
	public function title(): string
    {
        // This text also appears in the .XML file - update both together
        /* I18N: Name of a module/report */
        return I18N::translate('Convicts Two');
    }
	
	/**
     * Where does this module store its resources
     *
     * @return string
     */
    public function resourcesFolder(): string
    {
        return __DIR__ . '/resources/';
    }

    /**
     * A sentence describing what this module does.
     *
     * @return string
     */
    public function description(): string
    {
        // This text also appears in the .XML file - update both together
        /* I18N: Description of the “Convict2” module */
        return I18N::translate('V2 report of the convict ancestors of an individual');
    }
/**
     * Name of the XML report file, relative to the resources folder.
     *
     * @return string
     */
    public function xmlFilename(): string
    {
        return 'report.xml';
    }
    /**
     * Return a menu item for this report.
     *
     * @param Individual $individual
     *
     * @return Menu
     */
 /*    public function getReportMenu(Individual $individual): Menu
    {
        $family = $individual->spouseFamilies()->first() ?? 
		$individual->childFamilies();
        $xref   = $family instanceof Family ? $family->xref() : '';

        return new Menu(
            $this->title(),
            route(ReportSetupPage::class, [
                'tree'   => $individual->tree()->name(),
                'xref'   => $xref,
                'report' => $this->name(),
            ]),
            'menu-report-' . $this->name(),
            ['rel' => 'nofollow']
        );
    } */
	
}
