<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_08bfde386115dd299aabb6d4f9657fa341293827ad3531d0344ef82ef1b8aa8e extends Twig_Template
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
        $__internal_03178e1c08cbd30b99efba095ac1b6c6755c99a0026abd4a12312ef8b4e9c2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03178e1c08cbd30b99efba095ac1b6c6755c99a0026abd4a12312ef8b4e9c2c1->enter($__internal_03178e1c08cbd30b99efba095ac1b6c6755c99a0026abd4a12312ef8b4e9c2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8cbca8f4e5122b82884794ddf47284a581b43ab7a1775b31f0679e8e6581c246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbca8f4e5122b82884794ddf47284a581b43ab7a1775b31f0679e8e6581c246->enter($__internal_8cbca8f4e5122b82884794ddf47284a581b43ab7a1775b31f0679e8e6581c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03178e1c08cbd30b99efba095ac1b6c6755c99a0026abd4a12312ef8b4e9c2c1->leave($__internal_03178e1c08cbd30b99efba095ac1b6c6755c99a0026abd4a12312ef8b4e9c2c1_prof);

        
        $__internal_8cbca8f4e5122b82884794ddf47284a581b43ab7a1775b31f0679e8e6581c246->leave($__internal_8cbca8f4e5122b82884794ddf47284a581b43ab7a1775b31f0679e8e6581c246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
