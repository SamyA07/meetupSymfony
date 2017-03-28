<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0df2babeab86c70fe513f539f60e4fcccf6b8453a8fc36215f2065922b825e70 extends Twig_Template
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
        $__internal_c4cf2b10704db1f41cfac05d27dbce50c9c5ea30335b7fcabaa389b784cd02f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cf2b10704db1f41cfac05d27dbce50c9c5ea30335b7fcabaa389b784cd02f9->enter($__internal_c4cf2b10704db1f41cfac05d27dbce50c9c5ea30335b7fcabaa389b784cd02f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0ff7b3a39870d00629cf41e06869e5dfbc9c8ec08696c8b6e0b9cd35d9e3b181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff7b3a39870d00629cf41e06869e5dfbc9c8ec08696c8b6e0b9cd35d9e3b181->enter($__internal_0ff7b3a39870d00629cf41e06869e5dfbc9c8ec08696c8b6e0b9cd35d9e3b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c4cf2b10704db1f41cfac05d27dbce50c9c5ea30335b7fcabaa389b784cd02f9->leave($__internal_c4cf2b10704db1f41cfac05d27dbce50c9c5ea30335b7fcabaa389b784cd02f9_prof);

        
        $__internal_0ff7b3a39870d00629cf41e06869e5dfbc9c8ec08696c8b6e0b9cd35d9e3b181->leave($__internal_0ff7b3a39870d00629cf41e06869e5dfbc9c8ec08696c8b6e0b9cd35d9e3b181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
