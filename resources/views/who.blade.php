<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kingsley and Maddie's Wedding - 23rd September 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

        <link href="/css/app.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='//fonts.googleapis.com/css?family=Playfair+Display:100,300,400,700%7COpen+Sans' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class="container">
            <p class="lead" style="margin-top:15px;">
                Total Coming: {!! $coming->sum( 'count' ); !!} People / Total Replies: {!! $rsvps->count(); !!}
            </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name(s)</th>
                        <th>Contact Email</th>
                        <th>Count</th>
                        <th>Attending?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rsvps as $rsvp)
                        <tr class="table-striped @if($rsvp->answer) success @else danger @endif ">
                            <td>
                                {!! $rsvp->names !!}
                            </td>
                            <td>
                                {!! $rsvp->email !!}
                            </td>
                            <td>
                                {!! $rsvp->count !!}
                            </td>
                            <td>
                                @if($rsvp->answer)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>