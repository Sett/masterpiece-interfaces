<?php
namespace funcraft\masterpiece\interfaces;

use funcraft\creator\interfaces\ICreator;
use funcraft\kind\interfaces\IKind;

/**
 * Interface IMasterpiece
 * @package funcraft\masterpiece\interfaces
 * @author Funcraft <what4me@yandex.ru>
 */
interface IMasterpiece
{
    const TABLE_NAME = 'funcraft__masterpiece';

    const FIELD_ID              = 'id';
    const FIELD_CREATOR         = 'creator_id';
    const FIELD_KIND            = 'kind_id';
    const FIELD_CONTENT         = 'content';
    const FIELD_ACCESS_LEVEL    = 'access_level';
    const FIELD_TITLE           = 'title';
    const FIELD_CREATION_DATE   = 'created';
    const FIELD_UPDATE_DATE     = 'updated';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return ICreator
     */
    public function getCreator();

    /**
     * @return IKind
     */
    public function getKind();

    /**
     * @return string
     */
    public function getContent();

    /**
     * @return int
     */
    public function getAccessLevel();

    /**
     * @return bool
     */
    public function isPublic();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $format
     * @return int|string
     */
    public function getCreationDate(string $format = '');

    /**
     * @param string $format
     * @return int|string
     */
    public function getUpdateDate(string $format = '');
}
