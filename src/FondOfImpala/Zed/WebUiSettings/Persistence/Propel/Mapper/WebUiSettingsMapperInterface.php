<?php

namespace FondOfImpala\Zed\WebUiSettings\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\WebUiSettingsTransfer;
use Orm\Zed\WebUiSettings\Persistence\FoiWebUiSettings;

interface WebUiSettingsMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\WebUiSettingsTransfer $webUiSettingsTransfer
     * @param \Orm\Zed\WebUiSettings\Persistence\FoiWebUiSettings|null $entity
     *
     * @return \Orm\Zed\WebUiSettings\Persistence\FoiWebUiSettings
     */
    public function fromTransferToEntity(WebUiSettingsTransfer $webUiSettingsTransfer, ?FoiWebUiSettings $entity = null): FoiWebUiSettings;

    /**
     * @param \Orm\Zed\WebUiSettings\Persistence\FoiWebUiSettings $entity
     * @param \Generated\Shared\Transfer\WebUiSettingsTransfer|null $webUiSettingsTransfer
     *
     * @return \Generated\Shared\Transfer\WebUiSettingsTransfer
     */
    public function fromEntityToTransfer(FoiWebUiSettings $entity, ?WebUiSettingsTransfer $webUiSettingsTransfer = null): WebUiSettingsTransfer;
}
