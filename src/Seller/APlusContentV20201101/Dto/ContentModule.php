<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContentModule extends BaseDto
{
    /**
     * @param  string  $contentModuleType  The type of A+ Content module.
     * @param  ?StandardCompanyLogoModule  $standardCompanyLogo  The standard company logo image.
     * @param  ?StandardComparisonTableModule  $standardComparisonTable  The standard product comparison table.
     * @param  ?StandardFourImageTextModule  $standardFourImageText  Four standard images with text, presented across a single row.
     * @param  ?StandardFourImageTextQuadrantModule  $standardFourImageTextQuadrant  Four standard images with text, presented on a grid of four quadrants.
     * @param  ?StandardHeaderImageTextModule  $standardHeaderImageText  Standard headline text, an image, and body text.
     * @param  ?StandardImageSidebarModule  $standardImageSidebar  Two images, two paragraphs, and two bulleted lists. One image is smaller and displayed in the sidebar.
     * @param  ?StandardImageTextOverlayModule  $standardImageTextOverlay  A standard background image with a floating text box.
     * @param  ?StandardMultipleImageTextModule  $standardMultipleImageText  Standard images with text, presented one at a time. The user clicks on thumbnails to view each block.
     * @param  ?StandardProductDescriptionModule  $standardProductDescription  Standard product description text.
     * @param  ?StandardSingleImageHighlightsModule  $standardSingleImageHighlights  A standard image with several paragraphs and a bulleted list.
     * @param  ?StandardSingleImageSpecsDetailModule  $standardSingleImageSpecsDetail  A standard image with paragraphs and a bulleted list, and extra space for technical details.
     * @param  ?StandardSingleSideImageModule  $standardSingleSideImage  A standard headline and body text with an image on the side.
     * @param  ?StandardTechSpecsModule  $standardTechSpecs  The standard table of technical feature names and definitions.
     * @param  ?StandardTextModule  $standardText  A standard headline and body text.
     * @param  ?StandardThreeImageTextModule  $standardThreeImageText  Three standard images with text, presented across a single row.
     */
    public function __construct(
        public readonly string $contentModuleType,
        public readonly ?StandardCompanyLogoModule $standardCompanyLogo = null,
        public readonly ?StandardComparisonTableModule $standardComparisonTable = null,
        public readonly ?StandardFourImageTextModule $standardFourImageText = null,
        public readonly ?StandardFourImageTextQuadrantModule $standardFourImageTextQuadrant = null,
        public readonly ?StandardHeaderImageTextModule $standardHeaderImageText = null,
        public readonly ?StandardImageSidebarModule $standardImageSidebar = null,
        public readonly ?StandardImageTextOverlayModule $standardImageTextOverlay = null,
        public readonly ?StandardMultipleImageTextModule $standardMultipleImageText = null,
        public readonly ?StandardProductDescriptionModule $standardProductDescription = null,
        public readonly ?StandardSingleImageHighlightsModule $standardSingleImageHighlights = null,
        public readonly ?StandardSingleImageSpecsDetailModule $standardSingleImageSpecsDetail = null,
        public readonly ?StandardSingleSideImageModule $standardSingleSideImage = null,
        public readonly ?StandardTechSpecsModule $standardTechSpecs = null,
        public readonly ?StandardTextModule $standardText = null,
        public readonly ?StandardThreeImageTextModule $standardThreeImageText = null,
    ) {
    }
}
