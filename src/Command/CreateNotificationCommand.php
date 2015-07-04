<?php

namespace Dizda\OnesignalApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CreateNotificationCommand
 *
 * @author Jonathan Dizdarevic <dizda@dizda.fr>
 */
class CreateNotificationCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('onesignal:notification:create')
            ->setDescription('Create a push notification.')
            ->setHelp(<<<EOF
The <info>%command.name%</info> create a push notification:

<info>php %command.full_name% --env=dev</info>
<info>php %command.full_name% --env=prod --no-debug</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getContainer()->get('dizda_onesignal_api.service.client');
        var_dump($client);
    }
}
