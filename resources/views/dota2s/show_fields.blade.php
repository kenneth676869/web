<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $dota2->name }}</p>
</div>

<!-- Hero Type Field -->
<div class="col-sm-12">
    {!! Form::label('hero_type', 'Hero Type:') !!}
    <p>{{ $dota2->hero_type }}</p>
</div>

<!-- Hero Skills Field -->
<div class="col-sm-12">
    {!! Form::label('hero_skills', 'Hero Skills:') !!}
    <p>{{ $dota2->hero_skills }}</p>
</div>

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $dota2->rating }}</p>
</div>

