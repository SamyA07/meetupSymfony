<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c5bc807a5f0915bb481b48ff9b5d01f326abccf50d46f2fce9a85e7d1e70c65 extends Twig_Template
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
        $__internal_5ab14b3437e3f67bd527663cf3d7ea4fbff4874bc61187fc68d89ca0142e6491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab14b3437e3f67bd527663cf3d7ea4fbff4874bc61187fc68d89ca0142e6491->enter($__internal_5ab14b3437e3f67bd527663cf3d7ea4fbff4874bc61187fc68d89ca0142e6491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_81649380d31917e883642893395e8f3e87d30bf11f50f4f836c2eff4c9043be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81649380d31917e883642893395e8f3e87d30bf11f50f4f836c2eff4c9043be5->enter($__internal_81649380d31917e883642893395e8f3e87d30bf11f50f4f836c2eff4c9043be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5ab14b3437e3f67bd527663cf3d7ea4fbff4874bc61187fc68d89ca0142e6491->leave($__internal_5ab14b3437e3f67bd527663cf3d7ea4fbff4874bc61187fc68d89ca0142e6491_prof);

        
        $__internal_81649380d31917e883642893395e8f3e87d30bf11f50f4f836c2eff4c9043be5->leave($__internal_81649380d31917e883642893395e8f3e87d30bf11f50f4f836c2eff4c9043be5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
