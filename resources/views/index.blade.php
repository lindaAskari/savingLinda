@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">لیست مسیر های وارد شده</h5>
            <a href="{{ route('form.create') }}" class="btn btn-dark">
                <i class="fas fa-plus"></i> ایجاد جدید
            </a>
        </div>
        <div class="card-body p-0">
            <style>
                .custom-table th, 
                .custom-table td {
                    white-space: nowrap;
                    padding: 12px 20px !important;
                    vertical-align: middle;
                }
                .custom-table th {
                    background-color: #f8f9fa;
                    position: sticky;
                    top: 0;
                }
                .full-text {
                    white-space: normal;
                    word-wrap: break-word;
                    max-width: 300px;
                }
                .show-more {
                    color: #007bff;
                    cursor: pointer;
                    text-decoration: underline;
                }
            </style>
            
            <div class="table-responsive" style="max-height: 75vh; overflow-y: auto;">
                <table class="table custom-table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>کارشناس فروش</th>
                            <th>منطقه شهری</th>
                            <th>مسیر ویزیت</th>
                            <th>سرپرست</th>
                            <th>تایم حضور مسول خرید</th>
                            <th>نام مشتری</th>
                            <th>صنف فعالیت</th>
                            <th>نام فروشگاه</th>
                            <th>شماره تماس</th>
                            <th>آدرس دقیق</th>
                            <th>توضیحات</th>
                            <th>دلیل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            <tr>
                                <td class="full-text">{{ $form->sales_expert }}</td>
                                <td class="full-text">{{ $form->city_zone }}</td>
                                <td class="full-text">{{ $form->visit_route }}</td>
                                <td class="full-text">{{ $form->supervisor }}</td>
                                <td class="full-text">{{ $form->purchase_manager_time }}</td>
                                <td class="full-text">{{ $form->name_of_the_customer }}</td>
                                <td class="full-text">{{ $form->activity }}</td>
                                <td class="full-text">{{ $form->name_of_the_store }}</td>
                                <td class="full-text" dir="ltr">{{ $form->phone_number }}</td>
                                <td class="full-text">{{ $form->address }}</td>
                                <td class="full-text">{{ $form->explanation }}</td>
                                <td class="full-text">{{ $form->selected_option }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-3">
                {{ $forms->links('layout.paginate') }}
            </div>
        </div>
    </div>

    <!-- Modal for full text view -->
    <div class="modal fade" id="fullTextModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">مشاهده کامل متن</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="fullTextContent">
                    <!-- Content will be inserted here by JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Optional: If you want to add a show more functionality
        document.addEventListener('DOMContentLoaded', function() {
            const cells = document.querySelectorAll('.full-text');
            cells.forEach(cell => {
                if (cell.scrollWidth > cell.clientWidth) {
                    cell.addEventListener('click', function() {
                        const modal = new bootstrap.Modal(document.getElementById('fullTextModal'));
                        document.getElementById('fullTextContent').textContent = this.textContent;
                        modal.show();
                    });
                    cell.style.cursor = 'pointer';
                    cell.title = 'کلیک کنید برای مشاهده کامل متن';
                }
            });
        });
    </script>
@endsection