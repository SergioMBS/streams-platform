<?php namespace Anomaly\Streams\Platform\Ui\Form\Section;

use Anomaly\Streams\Platform\Ui\Form\Contract\FormSectionInterface;
use Anomaly\Streams\Platform\Ui\Form\FormSection;

/**
 * Class DefaultFormSection
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Ui\Form\Section
 */
class DefaultFormSection extends FormSection implements FormSectionInterface
{

    /**
     * Return the heading.
     *
     * @return \Illuminate\View\View
     */
    public function heading()
    {
        $title = $this->getTitle();

        return view('html/section/default/heading', compact('title'));
    }

    /**
     * Return the body.
     *
     * @return \Illuminate\View\View
     */
    public function body()
    {
        $body = $this->getBody();

        return view('html/section/default/body', compact('body'));
    }

    /**
     * Get the title.
     *
     * @return string
     */
    protected function getTitle()
    {
        return trans(evaluate_key($this->section, 'title', 'misc.untitled'));
    }

    /**
     * Get the body.
     *
     * @return \Illuminate\View\View
     */
    private function getBody()
    {
        $layout = $this->getLayout();

        return view('html/section/layout', compact('layout'));
    }
}
 