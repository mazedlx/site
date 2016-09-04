<div class="col-md-4 ">
                    <div class="grid mask">
                        <a
                            data-toggle="modal"
                            href="#portfolioModal{{ $portfolio->id }}"
                        >
                            <img class="img-responsive portfolio-image" src="images/portfolio/{{ $portfolio->image }}" alt="">
                        </a>
                        <p class="text-center">{{ $portfolio->title }}</p>
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <div
                    class="modal fade"
                    id="portfolioModal{{ $portfolio->id }}"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="portfolioModal{{ $portfolio->id }}Label"
                    aria-hidden="true"
                >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">{{ $portfolio->title }}</h4>
                            </div>
                            <div class="modal-body">
                                <p><img class="img-responsive" src="images/portfolio/{{ $portfolio->image }}" alt=""></p>
                                <p>
                                    {!! $portfolio->description !!}
                                </p>
                                @if ($portfolio->technical != '')
                                <p>
                                    <strong>Technik</strong> {!! $portfolio->technical !!}
                                </p>
                                @endif
                                @if($portfolio->url != '')
                                <p><b><a class="portfolioLink" href="{{ $portfolio->url }}">Zur Seite</a></b></p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Schlie&szlig;en</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
