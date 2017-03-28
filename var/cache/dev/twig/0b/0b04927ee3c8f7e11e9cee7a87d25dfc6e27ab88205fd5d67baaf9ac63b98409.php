<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3d9e856520896d80a5c6d803fdc54da9f88b9ad9bc81e702b9a69888dc0f15d2 extends Twig_Template
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
        $__internal_c609f40a8fb68c382051c6d15b3d396822602e0d9f1b19013c0c433e8399d755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c609f40a8fb68c382051c6d15b3d396822602e0d9f1b19013c0c433e8399d755->enter($__internal_c609f40a8fb68c382051c6d15b3d396822602e0d9f1b19013c0c433e8399d755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b6c1f5bb7e8b6e2d8fca6a5068574cea6f8bb6c5546314ff06d459e4a88edaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c1f5bb7e8b6e2d8fca6a5068574cea6f8bb6c5546314ff06d459e4a88edaf9->enter($__internal_b6c1f5bb7e8b6e2d8fca6a5068574cea6f8bb6c5546314ff06d459e4a88edaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c609f40a8fb68c382051c6d15b3d396822602e0d9f1b19013c0c433e8399d755->leave($__internal_c609f40a8fb68c382051c6d15b3d396822602e0d9f1b19013c0c433e8399d755_prof);

        
        $__internal_b6c1f5bb7e8b6e2d8fca6a5068574cea6f8bb6c5546314ff06d459e4a88edaf9->leave($__internal_b6c1f5bb7e8b6e2d8fca6a5068574cea6f8bb6c5546314ff06d459e4a88edaf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
