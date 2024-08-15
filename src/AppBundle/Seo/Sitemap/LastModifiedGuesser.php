<?php
namespace AppBundle\Seo\Sitemap;

use Symfony\Cmf\Bundle\SeoBundle\Sitemap\VoterInterface;
use Symfony\Cmf\Bundle\SeoBundle\Sitemap\LoaderInterface;
use AppBundle\Model\LastModifiedInterface;

class LastModifiedGuesser implements VoterInterface, LoaderInterface
{

    /**
     * Updates UrlInformation with new values if they are not already set.
     *
     * @param UrlInformation $urlInformation The value object to update.
     * @param object         $object         The sitemap element to get values from.
     * @param string         $sitemap        Name of the sitemap being built.
     */
    public function guessValues(UrlInformation $urlInformation, $object, $sitemap)
    {
        if ($urlInformation->getLastModification()) {
            // guessers should not overwrite existing values
            return;
        }
        if (!$object instanceof LastModifiedInterface) {
            return;
        }

        // we assume that the LastModifiedInterface provides a method getLastModifiedDate that returns a DateTime object
        $urlInformation->setLastModification($object->getLastModifiedDate());
    }

    /**
     * @param string $sitemap the name of the sitemap
     *
     * @return Route[]
     */
    public function load($sitemap){

        return [$sitemap];
    }


    /**
     * Decide whether this content is visible on the specified sitemap.
     *
     * @param object $content the content object
     * @param string $sitemap name of the sitemap
     *
     * @return bool true if the content should be visible on the sitemap, false otherwise
     */
    public function exposeOnSitemap($content, $sitemap){
        return true;
    }
}