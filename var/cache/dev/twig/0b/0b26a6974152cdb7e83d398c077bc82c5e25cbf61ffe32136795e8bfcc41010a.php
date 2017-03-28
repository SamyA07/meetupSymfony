<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8f08070940b321f9bd55e7f622408db9dfedacc2575dc2688e7749980a930a79 extends Twig_Template
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
        $__internal_59a3aa3265527706018a2793dbd980dfa3140fc1115986492357edeb07de13d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a3aa3265527706018a2793dbd980dfa3140fc1115986492357edeb07de13d4->enter($__internal_59a3aa3265527706018a2793dbd980dfa3140fc1115986492357edeb07de13d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_624943831862e3b83e4e252505b26d144515ca0ad490662334df3b685f3a545d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624943831862e3b83e4e252505b26d144515ca0ad490662334df3b685f3a545d->enter($__internal_624943831862e3b83e4e252505b26d144515ca0ad490662334df3b685f3a545d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_59a3aa3265527706018a2793dbd980dfa3140fc1115986492357edeb07de13d4->leave($__internal_59a3aa3265527706018a2793dbd980dfa3140fc1115986492357edeb07de13d4_prof);

        
        $__internal_624943831862e3b83e4e252505b26d144515ca0ad490662334df3b685f3a545d->leave($__internal_624943831862e3b83e4e252505b26d144515ca0ad490662334df3b685f3a545d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
