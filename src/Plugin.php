<?php

namespace AdaptCloudHooks;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Installer\PackageEvents;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Installer\PackageEvent;
use Composer\Script\ScriptEvents;

class Plugin implements PluginInterface, EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public function activate(Composer $composer, IOInterface $io) {

  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return array(
      PackageEvents::POST_PACKAGE_INSTALL => 'postPackage',
      PackageEvents::POST_PACKAGE_UPDATE => 'postPackage',
      PackageEvents::POST_PACKAGE_UNINSTALL => 'postPackageUninstall',
    );
  }

  /**
   * Post package install and update event behaviour.
   *
   * @param \Composer\Installer\PackageEvent $event
   */
  public function postPackage(PackageEvent $event) {
    echo "Post update/install";
  }

  /**
   * Post package uninstall event behaviour.
   *
   * @param \Composer\Installer\PackageEvent $event
   */
  public function postPackageUninstall(PackageEvent $event) {
    echo "Post uninstall";
  }
}