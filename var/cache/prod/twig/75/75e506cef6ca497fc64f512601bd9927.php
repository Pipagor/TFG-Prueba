<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* solicitudes/habilidades_clase.html.twig */
class __TwigTemplate_ba25b7e76f13a015c3b53104bf394aa6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/habilidades_clase.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Hello BuscadorController!";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de clase</h1>
    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield " 
    <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre", [], "any", false, false, false, 14), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion", [], "any", false, false, false, 19), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel", [], "any", false, false, false, 24), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre2", [], "any", false, false, false, 30), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion2", [], "any", false, false, false, 35), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel2", [], "any", false, false, false, 40), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre3", [], "any", false, false, false, 46), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion3", [], "any", false, false, false, 51), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel3", [], "any", false, false, false, 56), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre4", [], "any", false, false, false, 62), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion4", [], "any", false, false, false, 67), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel4", [], "any", false, false, false, 72), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre5", [], "any", false, false, false, 78), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion5", [], "any", false, false, false, 83), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel5", [], "any", false, false, false, 88), 'widget');
        yield "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Enviar", [], "any", false, false, false, 97), 'row');
        yield "
        </div>
    </div>
 ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    
    </div>
 </div>
 


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "solicitudes/habilidades_clase.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  207 => 100,  201 => 97,  189 => 88,  181 => 83,  173 => 78,  164 => 72,  156 => 67,  148 => 62,  139 => 56,  131 => 51,  123 => 46,  114 => 40,  106 => 35,  98 => 30,  89 => 24,  81 => 19,  73 => 14,  66 => 10,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "solicitudes/habilidades_clase.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\solicitudes\\habilidades_clase.html.twig");
    }
}
