
                <tbody>
                    @foreach($proyectos as $proyecto)
                        <tr>
                            <th scope="row">{{$proyecto->id }}</th>
                            <td>{{$proyecto->titulo}}</td>
                            <td>{{$proyecto->descripcion}}</td>
                            <td>{{$proyecto->created_at}}</td>
                            <td>...</td> <!-- Aquí puedes poner botones de editar, ver, eliminar, etc. -->
                            <td>...</td>
                        </tr>
                    @endforeach
                </tbody>