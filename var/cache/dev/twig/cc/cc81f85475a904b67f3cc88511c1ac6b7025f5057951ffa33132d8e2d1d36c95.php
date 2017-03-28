<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_26eada4a8ea7a9608342beebdf7bb239062be96dae4ac006a01f02b0664c0eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dc5e1807361b81b65cb7432f37f263a5c0e8b5299e5c9d3cc169a1d71cdb622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc5e1807361b81b65cb7432f37f263a5c0e8b5299e5c9d3cc169a1d71cdb622->enter($__internal_6dc5e1807361b81b65cb7432f37f263a5c0e8b5299e5c9d3cc169a1d71cdb622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a9cbd00ee70de0d939edac56c658eebeaa234f0b9e41f71f150f205330a192f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cbd00ee70de0d939edac56c658eebeaa234f0b9e41f71f150f205330a192f5->enter($__internal_a9cbd00ee70de0d939edac56c658eebeaa234f0b9e41f71f150f205330a192f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6dc5e1807361b81b65cb7432f37f263a5c0e8b5299e5c9d3cc169a1d71cdb622->leave($__internal_6dc5e1807361b81b65cb7432f37f263a5c0e8b5299e5c9d3cc169a1d71cdb622_prof);

        
        $__internal_a9cbd00ee70de0d939edac56c658eebeaa234f0b9e41f71f150f205330a192f5->leave($__internal_a9cbd00ee70de0d939edac56c658eebeaa234f0b9e41f71f150f205330a192f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
