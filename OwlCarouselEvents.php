<?php

/*
 * @author      Douglas Saldana
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticOwlCarouselBundle;

/**
 * Class OwlCarouselEvents.
 *
 */
final class OwlCarouselEvents
{
    /**
     * The mautic.on_training_register_action event is dispatched when form with that action is submitted.
     *
     * The event listener receives a Mautic\CampaignBundle\Event\SubmissionEvent instance.
     *
     * @var string
     */
    const ON_TRAINING_REGISTER_ACTION = 'mautic.on_training_register_action';
}
