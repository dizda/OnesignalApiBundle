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
        $client->notifications->add([
            'headings' => [
                'en' => 'Withdraw'
            ],
            'contents' => [
                'en' => 'Your withdraw has been sent!'
            ],
            'include_player_ids' => ['6de78980-2297-11e5-ae29-43aa3272e73b'],
//            'included_segments' => ['All'],
//            'data' => ['foo' => 'bar'],
            'url' => 'http://bitter.io/privacy'
        ]);
    }
}
